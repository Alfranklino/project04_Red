<!-- This file is used to markup the public-facing widget. -->
<section class="business-hours">
    <?php if (strlen(trim($mon_fri)) > 0) : ?>
    
        <p>
            <span class="day-of-week"><strong>Monday-Friday:</strong> </span>
            <?php echo $mon_fri ?>
        </p>
    
    <?php endif; ?>
    
    <?php if (strlen(trim($sat)) > 0) : ?>
    
        <p>
            <span class="day-of-week"><strong>Saturday:</strong> </span>
            <?php echo $sat ?>
        </p>
    
    <?php endif; ?>
    
    <?php if (strlen(trim($sun)) > 0) : ?>
    
        <p>
            <span class="day-of-week"><strong>Sunday:</strong> </span>
            <?php echo $sun ?>
        </p>
    
    <?php endif; ?>
</section>