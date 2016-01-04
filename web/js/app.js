(function () {
    var app = angular.module('pinut', ['ngSanitize']);
    app.controller('MainController', function ($http) {
        var self = this;
        self.init = function () {
            self.selectedCategory = undefined;
            self.pageIndex = 0;
            self.pageSize = 3;
            self.apiListCategory();
            self.apiListProduct();
        };
        self.apiListCategory = function () {
            $http.get('/api/category/list').then(function successCallback(response) {
                self.categories = response.data;
            }, function errorCallback(response) {
            });
        };
        self.apiListProduct = function () {
            $http.get('/api/product/list').then(function successCallback(response) {
                self.products = response.data;
            }, function errorCallback(response) {
            });
        };
        self.detailProduct = function (e, index) {
            e.preventDefault();
            self.selectedProduct = index;
            $('#product-detail').modal('show');
        };
        self.setCategory = function (e, id) {
            e.preventDefault();
            self.pageIndex = 0;
            self.selectedCategory = id;
        };
        self.nextPage = function (e) {
            e.preventDefault();
            if (self.pageIndex + self.pageSize < self.filtered.length) {
                self.pageIndex++;
            }
        };
        self.prevPage = function (e) {
            e.preventDefault();
            if (self.pageIndex > 0) {
                self.pageIndex--;
            }
        };
        self.init();
    });
})();