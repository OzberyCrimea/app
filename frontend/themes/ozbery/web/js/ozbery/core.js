var app = new Vue({
    el: '#app',
    data: {
        mapUp: 'State_Outline',
        listВistricts: {
            Volga: 'Volga',
            Urals: 'Urals',
            Siberia: 'Siberia',
            Far_Eastern: 'Far_Eastern',
            Northwestern: 'Northwestern',
            Central: 'Central',
            KC: 'KC',
            KL: 'KL',
            Crimea: 'Crimea'
        }
    },
    methods: {
        addShadowInMap: function (el) {
            for(var e in this.listВistricts){
                if(document.getElementById(e)){
                    document.getElementById(e).setAttribute("style", "fill:url(#gradient);stroke:#000000;fill-opacity:1;");
                }
            }
            el.toElement.setAttribute("style", "fill:url(#gradient);stroke:#000000;fill-opacity:1;filter:url(#shadow);");
            var elem = el.toElement;
            var parent = document.getElementById(el.toElement.id).parentNode;
            parent.removeChild(elem);
            parent.appendChild(elem);
        }
    }
});