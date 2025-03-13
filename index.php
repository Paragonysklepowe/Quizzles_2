<!-- Add to existing HTML -->
<div class="container mt-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">
        Quiz Settings
        <span data-hint="Configure your quiz preferences here"></span>
      </h5>
      <div class="mb-3">
        <label for="quizTime" class="form-label">
          Time Limit (minutes)
          <span data-hint="Set the maximum time allowed for the quiz"></span>
        </label>
        <input type="number" class="form-control" id="quizTime">
      </div>
      <div class="mb-3">
        <label for="quizDifficulty" class="form-label">
          Difficulty Level
          <span data-hint="Choose between easy, medium, or hard difficulty"></span>
        </label>
        <select class="form-select" id="quizDifficulty">
          <option value="easy">Easy</option>
          <option value="medium">Medium</option>
          <option value="hard">Hard</option>
        </select>
      </div>
    </div>
  </div>
</div>
