window.onload = function() 
{
    var url_string = (window.location.href).toLowerCase();
    var url = new URL(url_string);
    var page = url.searchParams.get("page");
    var lang = url.searchParams.get("lang");
    
    if(page != "weapon_table" || page != "weapon_comment" || page != "character" || page != "signup" || page != "signin")
    {
        
    }
}