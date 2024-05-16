import './bootstrap';

Echo.channel("myEvent").subscribed(() => {
    console.log("success");
}).listen("sendMessage", (event) => {
    console.log(event);
});
