<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="mycounter">
        <p>↓1up</p>
        <div v-text="count"></div>
        <p>↓10倍</p>
        <div v-text="count * 10"></div>
        <p>↓(1up) ※文字列連結</p>
        <div v-text="'(' + count + ')'"></div>
        <p>↓三項演算子　真だったらそのまま表示、偽だったら--表示</p>
        <div v-text="count ? count : '--'"></div>
        <p></p>
        <button v-on="click: count++">Up</button>
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
            }
        });
    </script>
</body>
</html>