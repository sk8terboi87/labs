/*
  WARNING - No coding standard followed :D
*/

var output;
var ws;
WEB_SOCKET_SWF_LOCATION = "WebSocketMain.swf";
//WEB_SOCKET_DEBUG = true;

function init(){
  output = document.getElementById("output");
}

function connect(){
  // Let the library know where WebSocketMain.swf is:

  // Write your code in the same way as for native WebSocket:
  ws = new WebSocket("ws://localhost:8080");
  output.innerHTML = "connecting..." ;

  //attach event handlers
  ws.onopen = onOpen;
  ws.onclose = onClose;
  ws.onmessage = onMessage;
  ws.onerror = onError;
} // end connect
function onOpen(evt){
  //called as soon as a connection is opened
  output.innerHTML = "<p><span class='label label-info'>CONNECTED TO SERVER</span></p>";
} // end onOpen
function onClose(evt){
  //called when connection is severed
  output.innerHTML += "<p><span class='label label-danger'>DISCONNECTED.</span></p>";
} // end onClose;
function onMessage(evt){
  //called on receipt of message
  output.innerHTML += "<p><span class='label label-primary'>RESPONSE:</span> "
    + evt.data + "</p>";
} // end onMessage
function onError(evt){
  //called on error
  output.innerHTML += "<p><span class = 'label label-warning'>ERROR:</span>"
    + evt.data + "</p>";
} // end onError
function sendMessage(){
  //get message from text field
  txtMessage = document.getElementById("txtMessage");
  message = txtMessage.value;
  ws.send(message);
  output.innerHTML += "<p><span class='label label-success'>MESSAGE SENT:</span> " + message + "</p>";
}
