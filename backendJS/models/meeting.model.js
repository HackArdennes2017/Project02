'use strict';

const Sequelize = require('sequelize');

const model = {
  meetingId: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
  status: {
    type: Sequelize.STRING
  }
};

module.exports.model = model;
