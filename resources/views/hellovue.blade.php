<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="mycounter">
        <div v-text="count"></div>
        <button v-on="click: countUp">Up</button>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // object(ViewModel) - data/methods(Model) <--> interface(View)
        // Model View ViewModel - MVVM

        // counter

        var vm = new Vue({
            el: '#mycounter',
            data: {
                count: 0
            },
            methods: {
                countUp: function() {
                    this.count++;
                }
            }
        });

    </script>
</body>
</html>