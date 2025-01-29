<?php
// Initialize an empty array to store countries and their towns
$countries = [];

// Initialize a set to keep track of towns that have already been processed
$existingTowns = [];

foreach ($allProperties['result']['properties']['property'] as $property) {
    $country = $property['country'];
    $town = $property['town'];

    // Skip if the town has already been processed (O(1) check)
    if (isset($existingTowns[$town])) {
        continue;
    }

    // Mark the town as processed (O(1) operation)
    $existingTowns[$town] = true;

    // If the country is not already in the array, add it
    if (!isset($countries[$country])) {
        $countries[$country] = [];
    }

    // Add the town to the respective country's list
    $countries[$country][] = $town;
}

?>
<?php

if (isset($_POST['search'])) {
    $location = $_POST['location'];
    $country = $POST['country'];
    $town = $_POST['town'];
    $adults = $_POST['adults'];
    $children = $_POST['children'];
    $guests = $adults + $children;
    $checkin = !empty($dates) ? explode(" - ", $dates)[0] : date('Y-m-d', strtotime('+2 days'));
    $checkout = !empty($dates) ? explode(" - ", $dates)[1] : date('Y-m-d', strtotime('+8 days'));
    
    header("Location: search.php?location=$location&country=$country&town=$town&checkin=$checkin&checkout=$checkout&adults=$adults&children=$children&guests=$guests");
    exit();
}
?>

<form method="post" action="">
    <div class="row g-0 custom-search-input-2">
        <div class="col-lg-4">
            <div class="form-group">
                <?php
                echo "<select name='location' id='location'>";  // Create a single select dropdown
                // Loop through the countries and their towns
                foreach ($countries as $country => $towns) {
                    // Create an optgroup for each country
                    echo "<option value='$country' class='bold'>$country</option>";  // Display the country as an option

                    // Loop through the towns and create an option for each
                    foreach ($towns as $town) {
                        echo "<option value='$town' country = '$country'>$town</option>";  // Display each town as an option
                    }
                }

                echo "</select>";  // Close the select dropdown
                ?>
                <input type="hidden" name="country" id="country" value="">
                <input type="hidden" name="town" id="town" value="">
                <i class="icon_pin_alt"></i>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input class="form-control" type="text" name="dates" placeholder="Checkin - Checkout">
                <i class="icon_calendar"></i>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="panel-dropdown">
                <a href="#">Guests <span class="qtyTotal">1</span></a>
                <div class="panel-dropdown-content">
                    <!-- Quantity Buttons -->
                    <div class="qtyButtons">
                        <label>Adults</label>
                        <input type="text" name="adults" value="1">
                    </div>
                    <div class="qtyButtons">
                        <label>Children</label>
                        <input type="text" name="children" value="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <input type="submit" class="btn_search" name="search" value="Search">
        </div>
    </div>
    <!-- /row -->
</form>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const locationSelect = document.getElementById("location");
    const currentSpan = document.querySelector("span.current");
    const countryInput = document.getElementById("country");
    const townInput = document.getElementById("town");

    // Initialize nice-select (if not already initialized)
    if ($.fn.niceSelect) {
        $(locationSelect).niceSelect();
    }

    // Function to update the hidden inputs and span based on the selected value
    function updateInputs(selectedValue) {
        // Find the corresponding option in the original select
        const selectedOption = Array.from(locationSelect.options).find(option => option.value === selectedValue);

        if (selectedOption) {
            // Update hidden inputs
            if (selectedOption.hasAttribute("country")) {
                countryInput.value = selectedOption.getAttribute("country");
            } else {
                countryInput.value = "";
            }
            townInput.value = selectedOption.value;

            // Update span.current if it exists
            if (currentSpan) {
                currentSpan.textContent = selectedOption.textContent;
            }
        }
    }

    // On page load, check if span.current matches any option
    if (currentSpan && currentSpan.textContent) {
        const currentText = currentSpan.textContent.trim();

        // Check if current text matches an option and select it
        Array.from(locationSelect.options).forEach((option) => {
            if (option.textContent.trim() === currentText) {
                locationSelect.value = option.value;

                // Refresh nice-select to reflect the change
                $(locationSelect).niceSelect("update");

                // Update hidden inputs
                updateInputs(option.value);
            }
        });
    }

    // Listen for changes from nice-select
    $(locationSelect).on("change", function () {
        const selectedValue = this.value;

        // Update hidden inputs and span
        updateInputs(selectedValue);
    });

    // Observe changes to span.current for dynamic updates
    if (currentSpan) {
        const observer = new MutationObserver(() => {
            const newText = currentSpan.textContent.trim();
            Array.from(locationSelect.options).forEach((option) => {
                if (option.textContent.trim() === newText) {
                    locationSelect.value = option.value;

                    // Refresh nice-select to reflect the change
                    $(locationSelect).niceSelect("update");

                    // Update hidden inputs
                    updateInputs(option.value);
                }
            });
        });

        observer.observe(currentSpan, { childList: true, subtree: true, characterData: true });
    }
});



</script>