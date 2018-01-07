<?php
namespace view;

interface OnClickListener
{
    public function onClick(View $view);
}

interface OnZoomingListener{
    public function onZooming(View $view, int $rate);
}

