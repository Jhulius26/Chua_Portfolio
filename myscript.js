function navigateToPage() {
      const dropdown = document.getElementById("activityDropdown");
      const selectedValue = dropdown.value;
      if (selectedValue) {
        window.location.href = selectedValue;
      }
}

function setSkillPercentage(skillId, percentage) {
    const skillElement = document.getElementById(skillId);
    skillElement.style.width = percentage + '%';
    skillElement.textContent = percentage + '%';
}

setSkillPercentage('htmlSkill', 25);
setSkillPercentage('cssSkill', 35);
setSkillPercentage('jsSkill', 10);
setSkillPercentage('phpSkill', 20);

function navigateToPage() {
    const dropdown = document.getElementById("activityDropdown");
    const selectedPage = dropdown.value;
    if (selectedPage) {
        window.location.href = selectedPage;
    }
}