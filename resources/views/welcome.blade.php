<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">


        <!-- Fonts -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PixelChain</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="{{asset('styles.css')}}" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
              background-image: url('https://cdn.wallpapersafari.com/29/32/xBJPpY.gif');
              background-size: cover;
              background-repeat: no-repeat;
              font-family: 'VT323', monospace;
              color: #fff;
              text-align: center;
            }

            h1 {
              font-size: 50px;
              margin-top: 20px;
            }

            p {
              font-size: 20px;
            }

            .button {
              display: inline-block;
              padding: 10px 20px;
              margin: 5px;
              font-size: 20px;
              color: #fff;
              background-color: rgba(0, 0, 0, 0.5);
              border: 2px solid #fff;
              border-radius: 5px;
              text-decoration: none;
              transition: background-color 0.3s, color 0.3s;
            }

            .button:hover {
              background-color: #fff;
              color: #000;
            }

            #colors .colorTile,
            #boardButtons .colorTile {
              width: 40px;
              height: 40px;
              margin: 5px;
              border: 2px solid #fff;
              border-radius: 5px;
              cursor: pointer;
            }

            #buttons {
              display: flex;
              flex-direction: column;
              align-items: center;
              margin: 20px 0;
            }

            #boardButtons .firstRow,
            #boardButtons .secondRow {
              display: flex;
              justify-content: center;
            }
          </style>
    </head>
    <body class="antialiased">
        <div class="container-fluid">
            <div class="row">
              <div class="col-sm-4 pt-4 mt-1">
                <div id="feed" class="px-3">
                  <h1 class="d-flex justify-content-between "><span>Daily Feed</span> <img src="assets/refresh.svg" alt="refresh" width="20"></h1>
                  <div class="row mb-3">
                    <div class="col-sm-2 pe-0">
                      <img src="{{asset('assets/profile1.svg')}}" alt="" class="img-fluid" width="30">
                    </div>
                    <div class="col-sm-9 ps-0">
                      <p style="text-align: left;">Deadloper   23:16 19-05-2024</p>
                      <div class="feedContainer p-3">
                        <img src="{{asset('assets/feed1.svg')}}" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-2 pe-0">
                      <img src="{{asset('assets/profile2.svg')}}" alt="" class="img-fluid" width="30">
                    </div>
                    <div class="col-sm-9 ps-0">
                      <p style="text-align: left;">Milinda   23:16 19-05-2024</p>
                      <div class="feedContainer p-3">
                        <img src="{{asset('assets/feed2.svg')}}" alt="">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              <div class="col-sm-4">
                <h1 style="font-family: 'VT323', monospace;">PixelChain</h1>
                <h3 id="boardSize" class="text-center" style="font-family: 'VT323', monospace;"></h3>
                <div id="gameUI"></div>
                <div id="buttons">
                  <div id="colors">
                    <div class="colorTile" id="red" style="background-color: red;"></div>
                    <div class="colorTile" id="yellow" style="background-color: yellow;"></div>
                    <div class="colorTile" id="green" style="background-color: green;"></div>
                    <div class="colorTile" id="blue" style="background-color: blue;"></div>
                    <div class="colorTile" id="dark" style="background-color: black;"></div>
                    <div class="colorTile" id="white" style="background-color: white;"></div>
                  </div>
                  <div id="boardButtons">
                    <div class="firstRow">
                      <img class="colorTile" id="eraser" src="assets/eraser.svg" />
                      <img class="colorTile" id="rainbow" src="assets/rainbow.svg" />
                      <img class="colorTile" id="bucketFill" src="assets/bucket.svg" />
                      <img class="colorTile" id="mirrorX" src="assets/x-axis.svg" />
                      <img class="colorTile" id="mirrorY" src="assets/y-axis.svg" />
                    </div>
                    <div class="secondRow">
                      <img class="colorTile" id="undo" src="assets/undo.svg" />
                      <img class="colorTile" id="redo" src="assets/redo.svg" />
                      <img class="colorTile" id="size" src="assets/resize.svg" />
                      <img class="colorTile" id="reset" src="assets/reset.svg" />
                      <img class="colorTile" id="camera" src="assets/camera.svg" />
                    </div>
                  </div>
                  <div style="background-color: rgba(0, 0, 0, 0.8); padding: 20px; border-radius: 10px; display: inline-block;">
                    <p style="font-family: 'VT323', monospace; color: #fff;">
                      Pixelchain lets you unleash your creativity and craft dazzling pixel art masterpieces. Sketch retro game
                      sprites, intricate patterns, or simple doodles with vibrant colors and intuitive tools. Turn your digital
                      dreams into reality, one pixel at a time. Your pixel adventure starts now!
                    </p>
                  </div>

                  <div>
                    <a href="https://x.com/pixelchain_" class="button" style="font-family: 'VT323', monospace;">Twitter</a>
                    <a href="https://t.me/pixelchainsol" class="button" style="font-family: 'VT323', monospace;">Telegram</a>
                    <a href="https://example.com" class="button" style="font-family: 'VT323', monospace;">Pump.fun</a>
                  </div>
                </div>

              </div>
              <div class="col-sm-4  pt-4 mt-1">
                <div class="row">
                  <div class="col-sm-12">
                    <a href="{{ route('google.redirect') }}" class="gsi-material-button">
                      <div class="gsi-material-button-state"></div>
                      <div class="gsi-material-button-content-wrapper">
                        <div class="gsi-material-button-icon">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                            xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;">
                            <path fill="#EA4335"
                              d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z">
                            </path>
                            <path fill="#4285F4"
                              d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z">
                            </path>
                            <path fill="#FBBC05"
                              d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z">
                            </path>
                            <path fill="#34A853"
                              d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z">
                            </path>
                            <path fill="none" d="M0 0h48v48H0z"></path>
                          </svg>
                        </div>
                        <span class="gsi-material-button-contents">Sign in with Google</span>
                        <span style="display: none;">Sign in with Google</span>
                      </div>
                    </a>

                  </div>

                </div>



                <div class="card" id="profile">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center"> <img
                        src="{{asset('assets/profileBig.svg')}}" alt="Admin"
                        class="rounded-circle p-1 bg-primary" style="max-width: 95%; width: 300px;">
                      <div class="mt-3">
                        <h2>Developer</h2>
                        <p class="text-secondary mb-1">She/He</p>
                        <div class="d-flex justify-content-center">
                          <img src="{{asset('assets/instragram.svg')}}" alt="in" width="60" style="margin-top: -5px;">
                          <img src="{{asset('assets/twitter.svg')}}" alt="tw" width="60">
                          <img src="{{asset('assets/facebook.svg')}}" alt="fb" width="57" style="margin-top: -6px;">
                        </div>
                        <div class="d-flex justify-content-between">

                            <h1>120</h1>
                            <h1>34</h1>

                        </div>
                        <div class="d-flex justify-content-between">

                          <p>Followers</p>
                          <p>Following</p>

                      </div>
                      <div class="feedContainer p-3">
                        <img src="assets/feed1.svg" alt="">
                      </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <script src="{{asset('html2canvas.js')}}" ></script>
          <script src="{{asset('script.js')}}" ></script>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
          crossorigin="anonymous"></script>
    </body>
</html>
