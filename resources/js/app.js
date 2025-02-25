import './bootstrap';
import '../../vendor/masmerise/livewire-toaster/resources/js';

import '@fortawesome/fontawesome-free/css/all.min.css';


import SimpleBar from 'simplebar';
import 'simplebar/dist/simplebar.css';
import { Dropdown } from '@preline/dropdown';
import { Overlay } from '@preline/overlay';
import jQuery from 'jquery';
import '@tabler/core';
import './sidebarmenu';

import {handleChange} from './utils/handlechange';
import {reloadScroll} from './utils/reloadscroll';
import {cycleHandleChange} from './utils/handlechange';

import {focusModal, clearModalFocus} from './utils/modalfocuscontainer';
import { AdapterformatNumeral, applyFormatToAllInputs, clearAllRegisteredInputsCleaveJS } from './utils/cleave-zen-formatnumeral';

    // sidebarJS();
    // SimpleBar;
    window.$ = jQuery;
    generarCotizacion();
        
    window.handleChange = handleChange;
    window.cycleHandleChange = cycleHandleChange;
    window.reloadScroll = reloadScroll;
    window.focusModal = focusModal;
    window.clearModalFocus = clearModalFocus;

    window.AdapterformatNumeral = AdapterformatNumeral;
    window.applyFormatToAllInputs = applyFormatToAllInputs;
document.addEventListener('livewire:navigated', () => {

})



// Para el sidebar menu, crea un archivo separado