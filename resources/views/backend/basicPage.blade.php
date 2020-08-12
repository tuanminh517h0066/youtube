<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{{asset('youtube')}}/">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <title>Youtube</title>
</head>
<body>
    <div class="row">
        <div class="col-lg-12 a">
            <h1 class="page-header" >
                <span id="youtube1">you</span>
                <span id="youtube">tube</span>  Analysis</h1>
        </div>
        <div class="row">
            
            <div class="col-xs-12 col-md-5 col-lg-sm4">
                <div class="panel panel-primary">
                    <div class="panel-body a">
                            @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    @foreach($errors->all() as $err)
                                        {{$err}}<br>
                                    @endforeach
                                </div>
                            @endif
                            @if(Session::has('thanhcong'))
                                <div class="alert alert-success">
                                    {{Session::get('thanhcong')}}
                                </div>
                            @endif
                        <!--
                            <form method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>
                                <div class="form-group">
                                    <label>Channel:</label>
                                    <input class="form-control" placeholder="Input your chanel" name="channelname" type="text" autofocus="">
                                    
                                </div>
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
-->
                            <form method="POST">
                            <input type="hidden" name="_token" value={{csrf_token()}}>

                                <div class="form-group">
                                    <label><h5 style="text-align: center;">Youtube chanel</h5></label>
                                    <input class="form-control" placeholder="Input your chanel" name="channelname" type="text" autofocus="">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            
                    </div>
                </div>
            </div>
            
            <div class="col-xs-12 col-md-7 col-lg-12">
                <div class="panel-heading">
                    <h3 style="text-align: center;" >Youtube chanel</h3>
                
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="bootstrap-table">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>No</th>
                                        <th>Youtube chanel</th>
                                        <th>Option</th>

                                        <th>LineChart</th>
                                        <th>BarChart</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list as $channel )
                                    <?php
                                    /*
                                        $key = "AIzaSyDVmwfj8qJH1IZiuoXdiZtwhlHDkivu4Hk";
                                        $base_url = "https://www.googleapis.com/youtube/v3/";
                                        
                
                                        $maxResult = 1;

                                        $API_URL = $base_url. "search?order=date&part=snippet&channelId=".$channel->id_channel."&maxResults=".
                                        $maxResult."&key=".$key;
                
                                        //echo $API_URL;
                                        
                                        $video = json_decode(file_get_contents($API_URL));
                                        
                                    */
                                    ?>
                                    <tr>
                                    
                                        <td>{{$channel->id}}</td>
                                   
                                        <td>{{$channel->channel}}</td>
                                    
                                        <td>
                                            <a href="{{asset('detail/'.$channel->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> detail</a>
                                        </td>
                                        
                                        <td>
                                            <a href="{{asset('chart/'.$channel->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> chart</a>
                                        </td>
                                        <td>
                                            <a href="{{asset('barchart/'.$channel->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> chart</a>
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>


                            </table>
                        </div>
                    </div>

                </div>

            </div>
            

        </div>
        

    </div>
    <footer class="page-footer font-small blue">

  <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background: black; padding: 30px; color: white">© 2020 Copyright:
            <a href="http://topfilms.unaux.com/" > Topfilms member</a>
        </div>
        <!-- Copyright -->

    </footer>
    

    
</body>

</html>
