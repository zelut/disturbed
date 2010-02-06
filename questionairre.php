<?php
require_once("header.inc.php");
?>

    <div id="content">

    <form method='POST' action='<?php $PHP_SELF ?>'>
        <b>Sadness:</b><br />
            <input type="radio" name="sadness" value="0" tabindex="1" />I do not feel sad<br />
            <input type="radio" name="sadness" value="1" tabindex="2" />I feel sad much of the time.<br />
            <input type="radio" name="sadness" value="2" tabindex="3" />I feel sad all the time.<br />
            <input type="radio" name="sadness" value="3" tabindex="4" />I am so sad or unhappy that I can't stand it.<br />
        <br /><b>Pessimism:</b><br />
            <input type="radio" name="pessimism" value="0" tabindex="5" />I am not discouraged about my future.<br />
            <input type="radio" name="pessimism" value="1" tabindex="6" />I feel more discouraged about my future than I used to.<br />
            <input type="radio" name="pessimism" value="2" tabindex="7" />I do not expect things to work out for me.<br />
            <input type="radio" name="pessimism" value="3" tabindex="8" />I feel my future is hopeless and will only get worse.<br />
        <br /><b>Past Failure:</b><br />
            <input type="radio" name="past_failure" value="0" tabindex="9" />I do not feel like a failure.<br />
            <input type="radio" name="past_failure" value="1" tabindex="10" />I have failed more than I should have.<br />
            <input type="radio" name="past_failure" value="2" tabindex="11" />As I look back, I see a lot of failures.<br />
            <input type="radio" name="past_failure" value="3" tabindex="12" />I feel I am a total failure as a person.<br />
        <br /><b>Loss of Pleasure:</b><br />
            <input type="radio" name="loss_of_pleasure" value="0" tabindex="13" />I get as much pleasure as I ever did from the things I enjoy.<br />
            <input type="radio" name="loss_of_pleasure" value="1" tabindex="14" />I don't enjoy things as much as I used to.<br />
            <input type="radio" name="loss_of_pleasure" value="2" tabindex="15" />I get very little pleasure from the things I used to enjoy."<br />
            <input type="radio" name="loss_of_pleasure" value="3" tabindex="16" />I can't get any pleasure from the things I used to enjoy.<br />
        <br /><b>Guilty Feelings:</b><br />
            <input type="radio" name="guilty_feelings" value="0" tabindex="17" />I don't feel particularly guilty.<br />
            <input type="radio" name="guilty_feelings" value="1" tabindex="18" />I feel guilty over many things I have done or should have done.<br />
            <input type="radio" name="guilty_feelings" value="2" tabindex="19" />I feel quite guilty most of the time.<br />
            <input type="radio" name="guilty_feelings" value="3" tabindex="20" />I feel guilty all of the time.<br />
        <br /><b>Punishment Feelings:</b><br />
            <input type="radio" name="punishment_feelings" value="0" tabindex="21" />I don't feel I am being punished.<br />
            <input type="radio" name="punishment_feelings" value="1" tabindex="22" />I feel I may be punished.<br />
            <input type="radio" name="punishment_feelings" value="2" tabindex="23" />I expect to be punished.<br />
            <input type="radio" name="punishment_feelings" value="3" tabindex="24" />I feel I am being punished.<br />
        <br /><b>Self-Dilike:</b><br />
            <input type="radio" name="self_dislike" value="0" tabindex="25" />I feel the same about myself as ever.<br />
            <input type="radio" name="self_dislike" value="1" tabindex="26" />I have lost confidence in myself.<br />
            <input type="radio" name="self_dislike" value="2" tabindex="27" />I am disappointed in myself.<br />
            <input type="radio" name="self_dislike" value="3" tabindex="28" />I dislike myself.<br />
        <br /><b>Self-Criticalness:</b><br />
            <input type="radio" name="self_criticalness" value="0" tabindex="29" />I don't criticize or blame myself more than usual.<br />
            <input type="radio" name="self_criticalness" value="1" tabindex="30" />I am more critical of myself than I used to be.<br />
            <input type="radio" name="self_criticalness" value="2" tabindex="31" />I criticize myself for all of my faults.<br />
            <input type="radio" name="self_criticalness" value="3" tabindex="32" />I blame myself for everything bad that happens.<br />
        <br /><b>Suicidal Thoughts or Wishes:</b><br />
            <input type="radio" name="suicical-thoughts_or_wishes" value="0" tabindex="33" />I don't have any thoughts of killing myself.<br />
            <input type="radio" name="suicical-thoughts_or_wishes" value="1" tabindex="34" />I have thoughts of killing myself, but I would not carry them out.<br />
            <input type="radio" name="suicical-thoughts_or_wishes" value="2" tabindex="35" />I would like to kill myself.<br />
            <input type="radio" name="suicical-thoughts_or_wishes" value="3" tabindex="36" />I would kill myself if I had the chance.<br />
        <br /><b>Crying:</b><br />
            <input type="radio" name="crying" value="0" tabindex="37" />I don't cry anymore than I used to.<br />
            <input type="radio" name="crying" value="1" tabindex="38" />I cry more often than I used to.<br />
            <input type="radio" name="crying" value="2" tabindex="39" />I cry over every little thing.<br />
            <input type="radio" name="crying" value="3" tabindex="40" />I feel like crying, but I can't.<br />
        <br /><b>Agitation:</b><br />
            <input type="radio" name="agitation" value="0" tabindex="41" />I am no more restless or would up than usual.<br />
            <input type="radio" name="agitation" value="1" tabindex="42" />I feel more restless or wound up than usual.<br />
            <input type="radio" name="agitation" value="2" tabindex="43" />I am so restless or agitated that it's hard to stay still.<br />
            <input type="radio" name="agitation" value="3" tabindex="44" />I am so restless or agitated that I have to keep moving or doing something.<br />
        <br /><b>Loss of Interest:</b><br />
            <input type="radio" name="loss_of_interest" value="0" tabindex="45" />I have not lost interest in other people or activities.<br />
            <input type="radio" name="loss_of_interest" value="1" tabindex="46" />I am less interested in other people or things than before.<br />
            <input type="radio" name="loss_of_interest" value="2" tabindex="47" />I have lost most of my interest in other people or things.<br />
            <input type="radio" name="loss_of_interest" value="3" tabindex="48" />It's hard to get interested in anything.<br />
        <br /><b>Indecisiveness:</b><br />
            <input type="radio" name="indecisiveness" value="0" tabindex="49" />I make decisions about as well as ever.<br />
            <input type="radio" name="indecisiveness" value="1" tabindex="50" />I find it more difficult to make decisions than usual.<br />
            <input type="radio" name="indecisiveness" value="2" tabindex="51" />I have much greater difficulty in making decisions than I used to.<br />
            <input type="radio" name="indecisiveness" value="3" tabindex="52" />I have trouble making any decisions.<br />
        <br /><b>Worthlessness:</b><br />
            <input type="radio" name="worthlessness" value="0" tabindex="53" />I do not feel I am worthless.<br />
            <input type="radio" name="worthlessness" value="1" tabindex="54" />I don't consider myself as worthwhile and useful as I used to.<br />
            <input type="radio" name="worthlessness" value="2" tabindex="55" />I feel more worthless as compared to others.<br />
            <input type="radio" name="worthlessness" value="3" tabindex="56" />I feel utterly worthless.<br />
        <br /><b>Loss of Energy:</b><br />
            <input type="radio" name="loss_of_energy" value="0" tabindex="57" />I have as much energy as ever.<br />
            <input type="radio" name="loss_of_energy" value="1" tabindex="58" />I have less energy than I used to have.<br />
            <input type="radio" name="loss_of_energy" value="2" tabindex="59" />I don't have enough energy to do very much.<br />
            <input type="radio" name="loss_of_energy" value="3" tabindex="60" />I don't have enough energy to do anything.<br />
        <br /><b>Changes in Sleeping Pattern:</b><br />
            <input type="radio" name="changes_in_sleeping_pattern" value=0" tabindex="61" />I have not experienced any change in my sleeping pattern.<br />
            <input type="radio" name="changes_in_sleeping_pattern" value=1" tabindex="62" />I sleep somewhat more / less than usual.<br />
            <input type="radio" name="changes_in_sleeping_pattern" value=2" tabindex="63" />I sleep a lot more / a lot less than usual.<br />
            <input type="radio" name="changes_in_sleeping_pattern" value=3" tabindex="64" />I sleep most of the day / I wake up 1-2 hours early and can't get back to sleep.<br />
        <br /><b>Irritability:</b><br />
            <input type="radio" name="irritability" value="0" tabindex="65" />I am no more irritable than usual.<br />
            <input type="radio" name="irritability" value="1" tabindex="66" />I am more irritable than usual.<br />
            <input type="radio" name="irritability" value="2" tabindex="67" />I am much more irritable than usual.<br />
            <input type="radio" name="irritability" value="3" tabindex="68" />I am irritable all the time.<br />
        <br /><b>Changes in Appetite:</b><br />
            <input type="radio" name="changes_in_appetite" value="0" tabindex="69" />I have not experienced any change in my appetite.<br />
            <input type="radio" name="changes_in_appetite" value="1" tabindex="70" />My appetite is somewhat less / greater than usual.<br />
            <input type="radio" name="changes_in_appetite" value="2" tabindex="71" />My appetite is much less / greater than usual.<br />
            <input type="radio" name="changes_in_appetite" value="3" tabindex="72" />I have no appetite at all / I crave food all the time.<br />
        <br /><b>Concentration Difficulty:</b><br />
            <input type="radio" name="concentration_difficulty" value="0" tabindex="73" />I can concentrate as well as ever.<br />
            <input type="radio" name="concentration_difficulty" value="1" tabindex="74" />I can't concentrate as well as usual.<br />
            <input type="radio" name="concentration_difficulty" value="2" tabindex="75" />It's very hard to keep my mind on anything for very long.<br />
            <input type="radio" name="concentration_difficulty" value="3" tabindex="76" />I find I can't concentrate on anything.<br />
        <br /><b>Tiredness or Fatigue:</b><br />
            <input type="radio" name="tiredness_or_fatigue" value="0" tabindex="77" />I am no more tired or fatigude than usual.<br />
            <input type="radio" name="tiredness_or_fatigue" value="1" tabindex="78" />I get more tired or fatigude more easily than usual.<br />
            <input type="radio" name="tiredness_or_fatigue" value="2" tabindex="79" />I am too tired or fatigued to do a lot of things I used to do.<br />
            <input type="radio" name="tiredness_or_fatigue" value="3" tabindex="80" />I am too tired or fatigude to do most of the things I used to do.<br />
        <br /><b>Loss of Interest in Sex:</b><br />
            <input type="radio" name="loss_of_interest_in_sex" value="0" tabindex="81" />I have not noticed any recent change in my interest in sex.<br />
            <input type="radio" name="loss_of_interest_in_sex" value="1" tabindex="82" />I am less interested in sex than I used to be.<br />
            <input type="radio" name="loss_of_interest_in_sex" value="2" tabindex="83" />I am much less interested in sex now.<br />
            <input type="radio" name="loss_of_interest_in_sex" value="3" tabindex="84" />I have lost interest in sex completely.<br />
        <br />
        <input type="Submit" name="submit" value="Submit" tabindex="85" /><br />
    </form>

<?php
require_once("footer.inc.php");
?>
