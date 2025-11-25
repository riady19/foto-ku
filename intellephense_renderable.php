<?php
namespace Illuminate\Contracts\View;

use Iluminate\Contracts\Support\Renderable;

interface View extends Renderable
{
    public function extends();
    public function section();
    public function layoutData();
    public function layout();

}
?>
