

(function ($) {
  $(document).ready(function () {
    
    var img_id = 0
    var num_of_img = 0;
    var uploader;

    generateID()
    choose()
    generateOption()
    selectionOption()
    removeClass()
    uploadImage()
    submit()
    resetButton()
    removeNotification()
    autoRemoveNotification()
    autoDequeue()
    submitCheck();
    
    var ID
    var way = 0
    var queue = []
    var fullStock = 10
    var speedCloseNoti = 1000

    function submitCheck(){
      $('#my-form').submit(function(e){
        // if not img in the form, then intercept the submit
        if(num_of_img <= 0)
          e.preventDefault(e);
      })
    }
    
    function generateID() {
      var text = $('header span')
      var newID = ''
    
      for(var i = 0; i < 3; i++) {
        newID += Math.floor(Math.random() * 3)
      }
      
      ID = 'ID: 5988' + newID
      text.html(ID)
    }
    
    function choose() {
      var li = $('.ways li')
      var section = $('.sections section')
      var index = 0
      li.on('click', function () {
        index = $(this).index()
        $(this).addClass('active')
        $(this).siblings().removeClass('active')
        
        section.siblings().removeClass('active')
        section.eq(index).addClass('active')
        if(!way) {
          way = 1
        }  else {
          way = 0
        }
      })
    }
    
    function generateOption() {
      var select = $('select option')
      var selectAdd = $('.select-option .option')
      $.each(select, function (i, val) {
          $('.select-option .option').append('<div rel="'+ $(val).val() +'">'+ $(val).html() +'</div>')
      })
    }
    
    function selectionOption() {
      var select = $('.select-option .head')
      var option = $('.select-option .option div')
    
      select.on('click', function (event) {
        event.stopPropagation()
        $('.select-option').addClass('active')
      })
      
      option.on('click', function () {
        var value = $(this).attr('rel')
        $('.select-option').removeClass('active')  
        select.html(value)
    
        $('select#category').val(value)
      })
    }
    
    function removeClass() {
      $('body').on('click', function () { 
        $('.select-option').removeClass('active')   
      })                  
    }
    
    function uploadImage() {
      var button = $('.images .pic')
      var uploader;
      var images = $('.images')
      
      button.on('click', function () {
        uploader = $('<input type="file" style="display:none" accept="image/*" name="imgs[]"/>')
        setImg(uploader,images)
        uploader.click()
      })
      
      // uploader.on('change', function () {
      //   console.log(uploader);
      //   var reader = new FileReader()
      //   reader.onload = function(event) {
      //     images.prepend('<div class="img" style="background-image: url(\'' + event.target.result + '\');" rel="'+ event.target.result  +'"><span>remove</span></div>')
      //   }
      //   reader.readAsDataURL(uploader[0].files[0])
      //   $('#wrapper').appendChild(uploader);
      // })
      
      images.on('click', '.img', function () {
        $(this).remove()
        num_of_img--;
      })
    
    }

    function setImg(newUploader, images){
      if(uploader != undefined)
        uploader.off
      
      uploader = newUploader;
      
      uploader.on('change', function () {
        console.log(uploader);
        var reader = new FileReader()
        reader.onload = function(event) {
          images.prepend('<div class="img" style="background-image: url(\'' + event.target.result + '\');" rel="'+ event.target.result  +'"><span>remove</span></div>')
        }
        reader.readAsDataURL(uploader[0].files[0])
        $('#wrapper').append(uploader);
        img_id++;
        num_of_img ++;
      })
    }
    
    function submit() {  
      var button = $('#send')
      
      button.on('click', function () {
        if(!way) {
          var title = $('#title')
          var cate  = $('#category')
          var images = $('.images .img')
          var imageArr = []

          
          for(var i = 0; i < images.length; i++) {
            imageArr.push({url: $(images[i]).attr('rel')})
          }
          
          var newStock = {
            title: title.val(),
            category: cate.val(),
            images: imageArr,
            type: 1
          }
          
          saveToQueue(newStock)
        } else {
          // discussion
          var topic = $('#topic')
          var message = $('#msg')
          
          var newStock = {
            title: topic.val(),
            message: message.val(),
            type: 2
          }
          
          saveToQueue(newStock)
        }
      })
    }
    
    function removeNotification() {
      var close = $('.notification')
      close.on('click', 'span', function () {
        var parent = $(this).parent()
        parent.fadeOut(300)
        setTimeout(function() {
          parent.remove()
        }, 300)
      })
    }
    
    function autoRemoveNotification() {
      setInterval(function() {
        var notification = $('.notification')
        var notiPage = $(notification).children('.btn')
        var noti = $(notiPage[0])
        
        setTimeout(function () {
          setTimeout(function () {
           noti.remove()
          }, speedCloseNoti)
          noti.fadeOut(speedCloseNoti)
        }, speedCloseNoti)
      }, speedCloseNoti)
    }
    
    function autoDequeue() {
      var notification = $('.notification')
      var text
      
      setInterval(function () {

          if(queue.length > 0) {
            if(queue[0].type == 2) {
              text = ' Your discusstion is sent'
            } else {
              text = ' Your order is allowed.'
            }
            
            notification.append('<div class="success btn"><p><strong>Success:</strong>'+ text +'</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
            queue.splice(0, 1)
            
          }  
      }, 10000)
    }
    
    function resetButton() {
      var resetbtn = $('#reset')
      resetbtn.on('click', function () {
        reset()
      })
    }
    
    // helpers
    function saveToQueue(stock) {
      var notification = $('.notification')
      var check = 0
      
      if(queue.length <= fullStock) {
        if(stock.type == 2) {
            if(!stock.title || !stock.message) {
              check = 1
            }
        } else {
          if(!stock.title || !stock.category || stock.images == 0) {
            check = 1
          }
        }
        
        if(check) {
          notification.append('<div class="error btn"><p><strong>Error:</strong> Please fill in the form.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
        } else {
          notification.append('<div class="success btn"><p><strong>Success:</strong> '+ ID +' is submitted.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
          queue.push(stock)
          reset()
        }
      } else {
        notification.append('<div class="error btn"><p><strong>Error:</strong> Please waiting a queue.</p><span><i class=\"fa fa-times\" aria-hidden=\"true\"></i></span></div>')
      } 
    }
    function reset() {
      
      $('#title').val('')
      $('.select-option .head').html('Category')
      $('select#category').val('')
      
      var images = $('.images .img')
      for(var i = 0; i < images.length; i++) {
        $(images)[i].remove()
      }
      
      var topic = $('#topic').val('')
      var message = $('#msg').val('')
    }
  })
})(jQuery)

