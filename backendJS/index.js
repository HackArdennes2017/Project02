var app = require('express')();
var server = require('http').Server(app);
var io = require('socket.io')(server);

const config = require('./config');

console.log(config);

server.listen(8080);

app.get('/', function (req, res) {
  res.sendfile(__dirname + '/index.html');
});

io.on('connection', function (socket) {

  socket.join(18);

  socket.on('lost', function (user) {
    console.log(user.name+' is lost.');
    io.to(user.userId).emit('lost', user);
  });

  socket.on('move', function (data) {
    console.log(data.user.name+' is moving to '+data.location.name);
    io.to(data.user.userId).emit('move', data);
  });

  socket.on('meetingRequest', function (data) {
    console.log(data.user.name+' asking to '+data.targetUser.name+' to meet at '+data.location.name);
    io.to(data.targetUser.userId).emit('requestFriend', data);
  });

  socket.on('meetingRequestResponse', function (data) {
    console.log(data.targetUser.name+' '+data.response+' to meet '+data.user.name+' at '+data.location.name);
    io.to(data.targetUser.userId).emit('meetingRequestResponse', data);
  });
});
