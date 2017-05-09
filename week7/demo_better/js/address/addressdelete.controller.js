(function () {
    
    'use strict';
    angular
        .module('app.address.delete')
        .controller('addressdeleteController', addressdeleteController);

    addressdeleteController.$inject = ['$routeParams','AddressService'];

    /*
     * This controller will find the details of an address from the address service.
     */
    function addressdeleteController($routeParams, AddressService) {
        var vm = this;

        vm.addressID = $routeParams.addressId;
        vm.message ={};

        activate();

        ////////////

      function activate() {
            AddressService.deleteAddress(addressId).then(function (response) {
                vm.message = 'Address Deleted';
            }, function(error) {
                vm.message = 'Address was NOT Deleted';
            });
        }
               
       

    }
    
})();