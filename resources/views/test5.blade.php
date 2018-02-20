<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>My Vue.js Practice</title>
</head>
<body>
    <div id="myapp">
        <p>
            <input type="text" v-model="name">
            @{{name}}
        </p>
        <p>
            <input type="checkbox" v-model="isAdmin">
            @{{isAdmin ? "admin" : "not admin"}}
        </p>
        <p>
            <input type="radio" name="phone" v-model="phone" value="iphone">
            <input type="radio" name="phone" v-model="phone" value="android">
            @{{phone}}
        </p>
        <p>
            <select v-model="city">
                <option value="tokyo">tokyo</option>
                <option value="kyoto">kyoto</option>
                <option value="osaka">osaka</option>
            </select>
            @{{city}}
        </p>
    </div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/0.11.4/vue.min.js"></script>
    <script>
        // v-model
        var vm = new Vue({
            el: '#myapp',
            data: {
                name: 'taniguchi', 
                isAdmin: true,
                phone: 'iphone',
                city: 'tokyo'
            }
        });
    </script>
</body>
</html>