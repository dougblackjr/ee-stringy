# EE-Stringy

### Created by Glenn Jacobs
[Website](http://glennjacobs.co.uk/)
#### Ported to EE3 by Doug Black

Stringy provides the following useful text manipulations.

Below are example usages...

    {exp:stringy:nl2br}{somevariable}{/exp:stringy:nl2br}

    {exp:stringy:lowercase}GLENN JACOBS{/exp:stringy:lowercase}
    
    {exp:stringy:uppercase}glenn jacobs{/exp:stringy:uppercase}
    
    {exp:stringy:upperfirst}glenn jacobs{/exp:stringy:upperfirst}
    
    {exp:stringy:slug separator="-" case="lower"}My Nice Title{/exp:stringy:slug}
        - case [=lower, upper, nochange]
        
    {exp:stringy:striptags allowed_tags="<b>"}{/exp:stringy:striptags}
        
    {exp:stringy:limitchars limit="75"}Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum.{/exp:stringy:limitchars}
        
    {exp:stringy:replace find="fun" replace="cool"}ExpressionEngine is so very fun!{/exp:stringy:replace}
        
    {exp:stringy:length}123456789{/exp:stringy:length}
    
    {exp:stringy:wordcount}One Two Three Four Five Six{/exp:stringy:wordcount}
    
    {exp:stringy:trim option="left"} I need trimming! {/exp:stringy:trim}
        - option [left,right,both]
        
    {exp:stringy:wordwrap width="75" break="\n" cut="false"}This is a loooooooooooooooooong word{/exp:stringy:wordwrap}
        
    {exp:stringy:shuffle}abcdefghijkl{/exp:stringy:shuffle}
    
    {exp:stringy:htmlentities}<p>Some nice char's etc.{/exp:stringy:htmlentities}
    
    {exp:stringy:htmlentitydecode}&lt;b&gt;Stuff&lt;/b&gt;{/exp:stringy:htmlentitydecode}
    
    {exp:stringy:pad length="75" string=" " type="right"}Pad me please{/exp:stringy:pad}
        - type [=right, left, both]
        
    {exp:stringy:numberformat decimals="0" dec_point="." thousands_sep=","}1234567890{/exp:stringy:numberformat}
     

