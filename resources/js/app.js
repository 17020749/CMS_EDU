import './bootstrap';
import Alpine from 'alpinejs';
import('preline');
import { Datepicker, Input, initTE, Tab, Modal, Carousel} from "tw-elements";
initTE({ Datepicker, Input, Tab, Modal, Carousel });
window.Alpine = Alpine;
Alpine.start();
