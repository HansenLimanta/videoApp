<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,   shrink-to-fit=no">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#ef3b2d",
                        },
                    },
                },
            };
        </script>
        <title>Video Detail</title>
    </head>
    <body>
        <div class="mt-8 p-8 bg-amber-300">
          <h1>Video List</h1>
                <div class="p-4 rounded-md flex items-center justify-center">
                  
                  @foreach ($videos as $video)
                    <video width="320" height="240" controls class="p-4">
                        <source src="{{URL::asset("/$video->video")}}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                  @endforeach
                </div>
        </div>
    </body>
</html>