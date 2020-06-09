---
title: 'main::lang.home.title'
permalink: /
description: ''
layout: default
---

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bs-stepper/dist/css/bs-stepper.min.css">

<div class="modal-body">  

        <div class="col-md-12 mt-2">
          <span>Steps</span>
          <div id="stepper1" class="bs-stepper">
            <div class="bs-stepper-header">
              <div class="step" data-target="#test-l-1">
                <button type="button" class="btn step-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">First step</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#test-l-2">
                <button type="button" class="btn step-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Second step</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#test-l-3">
                <button type="button" class="btn step-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label">Third step</span>
                </button>
              </div>
            </div>
            <div class="bs-stepper-content">
              <div id="test-l-1" class="content">
                <p class="text-center">test 1</p>
                <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
              </div>
              <div id="test-l-2" class="content">
                <p class="text-center">test 2</p>
                <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
              </div>
              <div id="test-l-3" class="content">
                <p class="text-center">test 3</p>
                <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
              </div>
            </div>
          </div>
        </div>  
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
    <script>
      var stepper1Node = document.querySelector('#stepper1')
      var stepper1 = new Stepper(document.querySelector('#stepper1'))

      stepper1Node.addEventListener('show.bs-stepper', function (event) {
        console.warn('show.bs-stepper', event)
      })
      stepper1Node.addEventListener('shown.bs-stepper', function (event) {
        console.warn('shown.bs-stepper', event)
      })      
    </script>