<?php
namespace Jiny\Shop\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;

class FilterPrice extends Component
{
    public $code;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($code=null)
    {
        $this->code = $code;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        //$rows = DB::table('shop_brands')->get();
        return view('jiny-shop::components.'.'filter_price');
    }
}
