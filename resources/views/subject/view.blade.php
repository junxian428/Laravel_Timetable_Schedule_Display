<html>
    <head>
        <title>Timetable made by Junxian428</title>
        <style>
            table, th, td{
                border:1px solid blue;
            }
        </style>
    </head>
    <body>
        <table>
        <tr>
            <th>Time/ Day</th>
            <th>7:00AM</th>
            <th>8:00AM</th>
            <th>9:00AM</th>
            <th>10:00AM</th>
            <th>11:00AM</th>
            <th>12:00PM</th>
            <th>1:00PM</th>
            <th>2:00PM</th>
            <th>3:00PM</th>
            <th>4:00PM</th>
            <th>5:00PM</th>
            <th>6:00PM</th>
            <th>7:00PM</th>
            <th>8:00PM</th>
        </tr>
            <tr>
            <td>Monday</td>
            <?php $array = array("", "", "", "","","","","","","","","","","","","",""); ?>
            @foreach($subjects as $subject)

                @if($subject->day == '1'){
                        <?php $array[$subject->start_time] = $subject->code . " " . $subject->name; ?>
                        <?php $array[$subject->end_time] =  $subject->code . " " .  $subject->name; ?>
                        @if($subject -> end_time - $subject -> start_time >= 2){
                            <?php $gap_class = $subject -> end_time - $subject -> start_time ?>
                            <?php $array[$subject->start_time + $gap_class -1] = $subject->code . " " . $subject->name; ?>
                        }
                        @endif
                } 
                @endif
                
            @endforeach
            <?php $i = 0; ?>
            @foreach($array as $item)
                @if($i >= 7){
                    <td>{{$item}}</td>
                }
                @else{
                    <?php $i++; ?>
                }
                @endif
            @endforeach
        

            </tr>
            <tr>
            <td>Tuesday</td>
            <?php $array = array("", "", "", "","","","","","","","","","","","","",""); ?>
               @foreach($subjects as $subject)

                @if($subject->day == '2'){
                        <?php $array[$subject->start_time] = $subject->code . " " . $subject->name; ?>
                        <?php $array[$subject->end_time] =  $subject->code . " " .  $subject->name; ?>
                        @if($subject -> end_time - $subject -> start_time >= 2){
                            <?php $gap_class = $subject -> end_time - $subject -> start_time ?>
                            <?php $array[$subject->start_time + $gap_class -1] = $subject->code . " " . $subject->name; ?>
                        }
                        @endif
                } 
                @endif
                
            @endforeach
            <?php $i = 0; ?>
            @foreach($array as $item)
                @if($i >= 7){
                    <td>{{$item}}</td>
                }
                @else{
                    <?php $i++; ?>
                }
                @endif
            @endforeach
        
            </tr>
            <tr>
            <td>Wednesday</td>
            <?php $array = array("", "", "", "","","","","","","","","","","","","",""); ?>
              @foreach($subjects as $subject)

                @if($subject->day == '3'){
                        <?php $array[$subject->start_time] = $subject->code . " " . $subject->name; ?>
                        <?php $array[$subject->end_time] =  $subject->code . " " .  $subject->name; ?>
                        @if($subject -> end_time - $subject -> start_time >= 2){
                            <?php $gap_class = $subject -> end_time - $subject -> start_time ?>
                            <?php $array[$subject->start_time + $gap_class -1] = $subject->code . " " . $subject->name; ?>
                        }
                        @endif
                } 
                @endif
                
            @endforeach
            <?php $i = 0; ?>
            @foreach($array as $item)
                @if($i >= 7){
                    <td>{{$item}}</td>
                }
                @else{
                    <?php $i++; ?>
                }
                @endif
            @endforeach
        
            </tr>
            <tr>
            <td>Thursday</td>
            <?php $array = array("", "", "", "","","","","","","","","","","","","",""); ?>

                 @foreach($subjects as $subject)

                @if($subject->day == '4'){
                        <?php $array[$subject->start_time] = $subject->code . " " . $subject->name; ?>
                        <?php $array[$subject->end_time] =  $subject->code . " " .  $subject->name; ?>
                        @if($subject -> end_time - $subject -> start_time >= 2){
                            <?php $gap_class = $subject -> end_time - $subject -> start_time ?>
                            <?php $array[$subject->start_time + $gap_class -1] = $subject->code . " " . $subject->name; ?>
                        }
                        @endif
                } 
                @endif
                
            @endforeach
            <?php $i = 0; ?>
            @foreach($array as $item)
                @if($i >= 7){
                    <td>{{$item}}</td>
                }
                @else{
                    <?php $i++; ?>
                }
                @endif
            @endforeach
        
            </tr>
            <tr>
            <td>Friday</td>
            <?php $array = array("", "", "", "","","","","","","","","","","","","",""); ?>
 @foreach($subjects as $subject)

                @if($subject->day == '5'){
                        <?php $array[$subject->start_time] = $subject->code . " " . $subject->name; ?>
                        <?php $array[$subject->end_time] =  $subject->code . " " .  $subject->name; ?>
                        @if($subject -> end_time - $subject -> start_time >= 2){
                            <?php $gap_class = $subject -> end_time - $subject -> start_time ?>
                            <?php $array[$subject->start_time + $gap_class -1] = $subject->code . " " . $subject->name; ?>
                        }
                        @endif
                } 
                @endif
                
            @endforeach
            <?php $i = 0; ?>
            @foreach($array as $item)
                @if($i >= 7){
                    <td>{{$item}}</td>
                }
                @else{
                    <?php $i++; ?>
                }
                @endif
            @endforeach
        
            </tr>


           
        </table>
    </body> 
      

</html>