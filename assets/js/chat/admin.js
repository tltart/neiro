import Echo from "laravel-echo"
window.io = require('socket.io-client');
// Have th is in case you stop running your laravel echo server

window.Echo = new Echo({
    broadcaster: 'socket.io',
    host:   'chat.neiros.ru:6001',
});
