

<script type="text/javascript" src="{{ url('preksh/dragdropfileupload/js/jquery.min.js') }}"></script> 
<script type="text/javascript" src="{{ url('preksh/dragdropfileupload/js/dropzone.js') }}"></script> 

<link href="{{ url('preksh/dragdropfileupload/css/dragdrop.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ url('preksh/dragdropfileupload/css/dropzone.css') }}" rel="stylesheet" type="text/css"/>


<div class="container">
    <div class="content">
        {!! Form::open(array('url' => 'saveupload','method'=>'POST','files'=>true,'class'=>'dropzone','id'=>'my-awesome-dropzone')) !!}                           

        {!! Form::close() !!}
    </div>
</div>
