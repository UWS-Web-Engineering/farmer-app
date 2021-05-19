// app.js
require('./bootstrap');

import request from "./components/Requests.svelte";

const request = new Requests({
  target: document.body
});

window.request = request;

export default request;