<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
{{-- <li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li> --}}
<li><a href='{{ backpack_url('meals') }}'><i class='fa fa-Meals'></i> <span>Meals</span></a></li>
<li><a href='{{ backpack_url('rating_individuals') }}'><i class='fa fa-Rating_individuals'></i> <span>Rating Individuals</span></a></li>
<li><a href='{{ backpack_url('users') }}'><i class='fa fa-Users'></i> <span>Users</span></a></li>