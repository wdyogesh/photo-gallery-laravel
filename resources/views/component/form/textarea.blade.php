<div class="form-group">
    {{form::label($name,null,['class'=>'control-label'])}}
    {{form::textarea($name,$value ,array_merge(['class'=>'form-control'],$attributes))}}
</div>