
<html>
<style>
    
    body, html {
    background-color: gray;
    height: 100%;
}


#subscriber {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 10;
}

#publisher {
    position: absolute;
    width: 360px;
    height: 240px;
    bottom: 10px;
    left: 10px;
    z-index: 100;
    border: 3px solid white;
    border-radius: 3px;
}

    
    </style>
<body>
    <script src="https://static.opentok.com/v2/js/opentok.js" charset="utf-8"></script>
    <script charset="utf-8">
      var apiKey = '####';
      var sessionId = '####';
   
      var token = "####"

  

// connect to session
var session = OT.initSession(apiKey, sessionId);

// create publisher
var publisher = OT.initPublisher();

session.connect(token, function(err) {
   // publish publisher
   session.publish(publisher); 
   console.log(publish(publisher));
})

  
// create subscriber
session.on('streamCreated', function(event) {
   session.subscribe(event.stream);
});
    </script>
  <!-- <p>Great work! You now have 2 clients publishing and subscribing. <br><strong>Click back to the previous Hello World tab in your browser to continue.</strong></p> -->
  </body>
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<style>
  body {
    font-family: Muli, Arial;
  }
  strong {
    color: #09c;
  }
  video{
      width:100px;
  }
  #OT_f5e4f6a8_c7f8_41eb_84ee_a43dfe7d20d1 {
    float:left;
    margin-right: 5px;
    /* position: absolute; */
    width: 360px;
    height: 500px;
    bottom: 10px;
    left: 10px;
    z-index: 1;
    border: 3px solid white;
    border-radius: 3px;
  }
 </style>
</html>