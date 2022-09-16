/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

require('./components/Home');
import ReactDOM  from 'react-dom';
import Home from './components/Home';
if (document.getElementById('index')) {
    ReactDOM.render(<Home />, document.getElementById('index'));
}
import { Autoplay, Navigation, Pagination } from "swiper";
import Swiper from "swiper";
Swiper.use([Autoplay, Navigation, Pagination]);

