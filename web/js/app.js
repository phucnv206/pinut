(function () {
    var app = angular.module('pinut', ['ngSanitize']);
    app.controller('MainController', function ($http, $window, $location) {
        var waypoints = $('.product').waypoint(function(direction) {
            $('.product-item').each(function (index) {
                var elm = $(this);
                setTimeout(function () {
                    elm.addClass('animated flipInY');
                }, index * 100);
            });
        }, {
            offset: 380
        });
        var self = this;
        self.init = function () {
            self.selectedCategory = undefined;
            self.pageIndex = 0;
            self.pageSize = 3;
            self.apiListSlide();
            self.apiListCategory();
            self.apiListProduct();
        };
        self.apiListSlide = function () {
            $http.get('/api/slide/list').then(function successCallback(response) {
                self.slides = response.data;
            }, function errorCallback(response) {
            });
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
        self.changeLanguage = function (lang) {
            $window.location.href = '/location?lang=' + lang + '&return=' + $location.path();
        };
        self.init();
    });
})();