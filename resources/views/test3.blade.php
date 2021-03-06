<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
    <style>
        .red { color: red; }
        .bold { font-weight: bold; }
    </style>
</head>
<body>
    <div id="myapp">
        <div v-class="red: isRed, bold: isBold">
            @{{content}}
        </div>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // v-class
        var vm = new Vue({
            el: '#myapp',
            data: {
                content: 'hello world',
                // myStyle: 'bold'
                isRed: true,
                isBold: true
            }
        });
    </script>
</body>
</html>