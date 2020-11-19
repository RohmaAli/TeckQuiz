<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row" style="margin-top:50px">
            <div class="col-md-6">
                <h3>Questions with Yes answers</h3>
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>question</th>
                            <th>selected answer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                @foreach($yes_Questions as $n)
                                    
                                    {{$n->question_name}} <br>
                                
                                @endforeach
                            </td>
                            <td>
                                @foreach($yes_answers as $ya)
                                    yes <br>
                                @endforeach
                            </td>
                        
                        </tr>      
                    </tbody>
                </table>
                </div><!--end responsive-->

            </div> <!--end col-md-6-->
            <div class="col-md-6">
                <h3>Questions with No answers</h3>
                <div class="table-responsive">
                <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>question</th>
                                <th>selected answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                @foreach($No_Questions as $n)
                                    
                                        {{$n->question_name}} <br>
                                
                                @endforeach
                                </td>
                                <td>
                                @foreach($No_answers as $na)
                                no <br>

                                @endforeach
                            
                                </td>
                            </tr>
                        </tbody>
                </table>
                </div> <!--end responsive-->
            </div> <!--end col-md-6-->
        </div> <!--end row-->
    </div> <!--end container-->
    
</body>
</html>
