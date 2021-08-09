<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <ul>

                                                
                @foreach ($posts as $post) 
        
                                <div class="image-container">

                                    <img src="/images/{{ $post -> image_path }}" alt="">

                                </div>


                        <li>
                             
                                <a href="{{ route('posts.show', $post -> id )}}">{{  $post -> title }}</a>


                            {{-- uses this to write in php admist the html tags or blocks --}}
                        
                        </li> 
                            
                            
                 @endforeach
                
              
            </ul>
        



</body>
</html>
    

