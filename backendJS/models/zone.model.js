'use strict';

const Sequelize = require('sequelize');

const model = {
  zoneId: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
  name: {
    type: Sequelize.STRING
  }
};

module.exports.model = model;




