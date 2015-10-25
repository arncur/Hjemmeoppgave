<!-- resources/views/gallery/image.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <title>Image upload</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background: #FFE0E0;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            form[id="upload_form"] {
                background: #F5F5F5;
                padding: 20px;
                border-radius: 10px;
            }

            input[type="submit"]{
                background: #FF6666;
                border: 0px;
                border-radius: 5px;
                color: #ffffff;
                padding: 10px;
                margin: 20px auto;
            }

            button{
                background: #FF6666;
                border: 0px;
                border-radius: 5px;
                color: #ffffff;
                padding: 10px;
                margin: 20px auto;
            }

            label{
                margin-right: 20px;
                color: #000000;
                font-size: 20px;
                font-style: bold;
            }

            button[type="logout"]{
                background: #FF6666;
                border: 0px;
                border-radius: 5px;
                color: #ffffff;
                padding: 10px;
                margin: 20px auto;
            }


        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                
               <!--<form method="GET" action="/gallery/image">
                {!! csrf_field() !!}-->

                    <div>

                        <h1>Image Gallery</h1>

                            <form id="upload_form" action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">

                                <label><b>Select image to upload</b></label>
                                <input type="file" name="file" id="file">
                                <input type="submit" value="upload" name="submit">
                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                            </form>

                             <form id="logout_btn" method="GET" action="logout">
                                {!! csrf_field() !!} 

                                <button type="logout">Log out</button>

                            </form>
        
                    </div>
                <!--</form> -->

            </div>
        </div>
    </body>
</html>


