import Highlight from './hightlight'
import Turbolinks from 'turbolinks';


Turbolinks.start();

document.addEventListener('turbolinks:load', () => {
    Highlight.start();
});

