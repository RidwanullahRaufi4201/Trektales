@extends('layout.app')
@section('content')
    
    <!-- Customized tour package  -->
  <div class="container">
             <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mt-5 p-4">
                        <h1 class="text-center mb-4">Customized Tour Package</h1>
                      <form id="customTourForm" method="post">
                          <!-- ... Form inputs ... -->
                        <label for="destination">Destination:</label>
                        <input type="text" id="destination" name="destination" class="form-control" required>
                        
                        <label for="travelDates">Travel Dates:</label>
                        <input type="date" id="travelDates" name="travelDates" class="form-control" required>
                        
                        <label for="accommodation">Accommodation Preference:</label>
                        <select id="accommodation" name="accommodation" class="form-control">
                          <option value="luxury">Luxury Hotel</option>
                          <option value="boutique">Boutique Inn</option>
                          <option value="budget">Budget Hostel</option>
                          <option value="rental">Vacation Rental</option>
                        </select>
                        
                        <div class="mb-3">
                          <label for="transportation" class="form-label">Transportation:</label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" id="flight" name="transportation" value="flight" required>
                            <label class="form-check-label" for="flight">Flight</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" id="train" name="transportation" value="train">
                            <label class="form-check-label" for="train">Train</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" id="car" name="transportation" value="car">
                            <label class="form-check-label" for="car">Private Car</label>
                          </div>
                        </div>
                        
                        <label for="groupSize">Group Size:</label>
                        <input type="number" id="groupSize" name="groupSize" class="form-control" min="1" required>
                        <div id="totalPrice"></div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                          <div class="text-center">
                            <button type="submit" class="btn btn-primary">Calculate Total Cost</button>
                          </div>
                        </form>
                        
                        <div id="totalPrice" class="text-center mt-4"></div>
                      </div>
                </div>
             </div>
  </div>
  <!-- End of customized tour package  -->

@endsection