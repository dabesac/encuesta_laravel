 @foreach ($pollquestion as $pollques)

    <?php //print_r($pollquestion) ?>
    <?php //print_r($collection) ?>
                   
        <p>{!! $pollques->question !!}</p>
   
            @foreach ($pollalternatives as $pollalter)            
            
             @if($pollalter->qid==$pollques->qid)
                
                @if($pollalter->position!=0)

                    <p>{!! $pollalter->alternativesecond !!}</p>                              

                    @foreach ($collection as $xxx)  

                        <p>{!! $xxx['name'] !!}</p>   

                    @endforeach


                    @for ($i = 0; $i < 3; $i++)
                      
                     <div class="form-group  col-md-6">
                        {!!Form::label('agresion_descripcion_lugar',$pollalter->alternative,['class'=>'control-label'])!!}
                        {!!Form::text('agresion_descripcion_lugar',null,['class'=>'form-control','placeholder'=>''])!!}
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('agresion_descripcion_lugar')!!}</div>
                    </div> 
                    @endfor

                @else            
                    <div class="form-group  col-md-6">
                        {!!Form::label('agresion_descripcion_lugar',$pollalter->alternative,['class'=>'control-label'])!!}
                        {!!Form::text('agresion_descripcion_lugar',$pollalter->alternativesecond,['class'=>'form-control','placeholder'=>''])!!}
                        <div class="bg-danger  p-h-xxs" style="font-size:12px;">{!!$errors->first('agresion_descripcion_lugar')!!}</div>
                    </div> 
                @endif              

             @endif
           
            @endforeach

    @endforeach

