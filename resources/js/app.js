import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'bootstrap/dist/css/bootstrap.min.css';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
