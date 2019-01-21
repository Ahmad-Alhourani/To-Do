<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.todos.title'))->class('col-md-2 form-control-label')->for('title') }}
            <div class="col-md-10">
                
                        {{ html()->text('title')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.todos.title'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.todos.description'))->class('col-md-2 form-control-label')->for('description') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('description')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.todos.description'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.todos.deadline'))->class('col-md-2 form-control-label')->for('deadline') }}
            <div class="col-md-10">
                
                        @php
                                $current_date=null;
                                if (isset($todo->deadline)){
                                $current_date=$todo->deadline->toDateString();
                                }

                            @endphp

                       {{ html()->date('deadline',$current_date)
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.todos.deadline'))
                        
                        
                      
                            ->required() 
                         }}

                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
               



    </div><!--col-->
</div><!--row-->