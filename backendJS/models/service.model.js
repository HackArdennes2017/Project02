'use strict';

const Sequelize = require('sequelize');

const model = {
  serviceId: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
  name: {
    type: Sequelize.STRING
  }
};

module.exports.model = model;