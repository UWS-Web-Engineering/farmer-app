// app.js
require('./bootstrap');

import App from "./components/App.svelte";
import Requests from "./components/Requests.svelte";

const app = new App({
  target: document.body
});

window.app = app;

export default app;