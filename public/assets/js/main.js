

(function () {
    "use strict";
    window.addEventListener('load', function () {
        document.querySelector('body').classList.add("loaded")
    });

    window.onload = function () {
        const getHeaderId = document.getElementById("navbar");
        if (getHeaderId) {
            window.addEventListener('scroll', event => {
                const height = 150;
                const {
                    scrollTop
                } = event.target.scrollingElement;
                document.querySelector('#navbar').classList.toggle('sticky', scrollTop >= height);
            });
        }
        const getId = document.getElementById("backtotop");
        if (getId) {
            const topbutton = document.getElementById("backtotop");
            topbutton.onclick = function (e) {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            };
            window.onscroll = function () {
                if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                    topbutton.style.opacity = "1";
                } else {
                    topbutton.style.opacity = "0";
                }
            };
        }
    };

    // document.documentElement.style.setProperty('--livewire-progress-bar-color', '#00FF45');

    AOS.init({
        startEvent: 'load',
    });
    var resultEl = document.querySelector(".resultSet"),
        plusMinusWidgets = document.querySelectorAll(".v-counter");
    for (var i = 0; i < plusMinusWidgets.length; i++) {
        plusMinusWidgets[i].querySelector(".minusBtn").addEventListener("click", clickHandler);
        plusMinusWidgets[i].querySelector(".plusBtn").addEventListener("click", clickHandler);
    }

    function clickHandler(event) {
        var countEl = event.target.parentNode.querySelector(".count");
        if (event.target.className.match(/\bminusBtn\b/)) {
            countEl.value = Number(countEl.value) - 1;
        } else if (event.target.className.match(/\bplusBtn\b/)) {
            countEl.value = Number(countEl.value) + 1;
        }
        triggerEvent(countEl, "change");
    };

    function triggerEvent(el, type) {
        if ('createEvent' in document) {
            var e = document.createEvent('HTMLEvents');
            e.initEvent(type, false, true);
            el.dispatchEvent(e);
        } else {
            var e = document.createEventObject();
            e.eventType = type;
            el.fireEvent('on' + e.eventType, e);
        }
    }

    function triggerEvent(el, type) {
        if ('createEvent' in document) {
            var e = document.createEvent('HTMLEvents');
            e.initEvent(type, false, true);
            el.dispatchEvent(e);
        } else {
            var e = document.createEventObject();
            e.eventType = type;
            el.fireEvent('on' + e.eventType, e);
        }
    }
    (() => {
        const ROOT_CLASS = 'scrollscreen';
        const createElement = (tag, name) => {
            const el = document.createElement(tag);
            el.className = `${ROOT_CLASS}--${name}`;
            return el;
        }
        const createScrollscreen = (root) => {
                const fragment = document.createDocumentFragment();
                [...root.childNodes].forEach(child => {
                    fragment.appendChild(child);
                });
                const content = createElement('div', 'content');
                content.appendChild(fragment);
                root.appendChild(content);
                const track = createElement('div', 'track');
                root.appendChild(track);
                const slider = createElement('div', 'slider');
                track.appendChild(slider);
                let pendingFrame = null;
                const redraw = () => {
                    cancelAnimationFrame(pendingFrame);
                    pendingFrame = requestAnimationFrame(() => {
                        const contentHeight = content.scrollHeight;
                        const containerHeight = root.offsetHeight;
                        const percentageVisible = containerHeight / contentHeight;
                        const sliderHeight = percentageVisible * containerHeight;
                        const percentageOffset = content.scrollTop / (contentHeight - containerHeight);
                        const sliderOffset = percentageOffset * (containerHeight - sliderHeight);
                        track.style.opacity = percentageVisible === 1 ? 0 : 1;
                        slider.style.cssText = `
                        height: ${sliderHeight}px;
                        transform: translateY(${sliderOffset}px);
                    `;
                    });
                }
                content.addEventListener('scroll', redraw);
                window.addEventListener('resize', redraw);
                redraw();
                const wakey = () => {
                    requestAnimationFrame(() => {
                        const offset = content.scrollTop;
                        content.scrollTop = offset + 1;
                        content.scrollTop = offset;
                    });
                }
                root.addEventListener('mouseenter', wakey);
                wakey();
            }
            [...document.querySelectorAll(`.${ROOT_CLASS}`)].forEach(createScrollscreen);
    })();
})();
try {
    function setTheme(themeName) {
        localStorage.setItem('baxo_theme', themeName);
        document.documentElement.className = themeName;
    }

    function toggleTheme() {
        if (localStorage.getItem('baxo_theme') === 'theme-dark') {
            setTheme('theme-light');
        } else {
            setTheme('theme-dark');
        }
    }
    (function () {
        if (localStorage.getItem('baxo_theme') === 'theme-dark') {
            setTheme('theme-dark');
            document.getElementById('slider').checked = false;
        } else {
            setTheme('theme-light');
            document.getElementById('slider').checked = true;
        }
    })();
} catch (err) {}
