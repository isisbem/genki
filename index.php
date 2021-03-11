<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="description" content=""> -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify@2.4.6/dist/vuetify.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

        <title>Genki Management Panel</title>
    </head>
    <body>
        <div id="main">
            <v-app>
                <v-main>
                    <v-container>
                        <!-- <v-btn color="primary" elevation="9" x-large>Progetto Genki</v-btn> -->
                    </v-container>
                </v-main>
            </v-app>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vuetify@2.4.6/dist/vuetify.js"></script>
        <script>
            new Vue({
                el: '#main',
                vuetify: new Vuetify(),
            })
        </script>
    </body>
</html>
