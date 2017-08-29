<?php

namespace App\Http\Controllers\Tools;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Menu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		Menu::macro('adminlteSubmenu', function ($submenuName, $icon = NULL) {
			$iconEle = empty($icon) ? '' : '<i class="fa ' . $icon . '"></i>';
		    return Menu::new()->prepend('<a href="#">' . $iconEle . '<span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
		        ->addParentClass('treeview')->addClass('treeview-menu');
		});
		Menu::macro('adminlteMenu', function () {
		    return Menu::new()
		        ->addClass('sidebar-menu')->setAttribute('data-widget', 'tree');
		});

		Menu::macro('toolsSidebar', function () {
		    return Menu::adminlteMenu()
			   ->url('/', '<i class="fa fa-circle-o"></i>工具大全')
			   ->url('/unixtime', '<i class="fa fa-circle-o"></i>Unix时间戳转换')
			   ->url('/strlen', '<i class="fa fa-circle-o"></i>在线字符串长度')
		    //    ->add(
		    //        Menu::adminlteSubmenu('菜单', 'fa-laptop')
		    //            ->add(Link::to('/profile', 'Profile'))
		    //            ->url('http://www.google.com', 'Google')
		    //    )
		        ->setActiveFromRequest();
		});
    }

    public function index(Request $request) {
		return view("tools.index");
	}

	public function module(Request $request, $module) {
		return view("tools.$module");
	}
}
