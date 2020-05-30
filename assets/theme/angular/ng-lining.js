


App.controller('liningControllers', function ($scope, $http, $location, $filter) {

    $scope.liningobject = {"image": "", "title": "", "price": "", };

    $scope.selectLining = {"image": "", "title": "", "price": "", "product_price": product_price};


    $scope.zoomFabric = function (title, img) {
        $scope.liningobject.image = img;
        $scope.liningobject.title = title;
    }

    $scope.selectLiningObj = function (title, price, image) {
        $scope.selectLining.image = image;
        $scope.selectLining.title = title;
        $scope.selectLining.price = price;
        $scope.selectLining.product_price = Number(product_price) + Number(price);
    }

    $scope.addToCartSuit = function () {
        var title = $scope.selectLining.title;
        var price = $scope.selectLining.price;
        $scope.addToCartLining(product_id_li, 1, item_id_li, title, price);
    }

});