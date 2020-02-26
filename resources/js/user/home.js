jQuery(document).ready(function () {
    //
    $.noConflict();
})
class Home {
    constructor() {
        this.initEvents();
    }

    initEvents(){
        this.clickEvent();
    }

    clickEvent(){
        // jQuery('.fa-bell').click(function () { 
        //     jQuery('.list-notify').toggle();
        //  });
        jQuery(document).on('click', '#user-name-home', this.showSettingForm)
    }
    
    showSettingForm(){
        jQuery('.setting-user').toggle();
    }
}
var home = new Home();