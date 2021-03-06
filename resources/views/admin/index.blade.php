@include('admin.parts.header', [ 'module' => $module ])
@include("admin.modules.$module")
@include('admin.parts.footer', [ 'script' => $script ])