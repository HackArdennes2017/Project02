'use strict';

const Sequelize = require('sequelize');

const model = {
  userId: {
    type: Sequelize.INTEGER,
    primaryKey: true,
    autoIncrement: true
  },
  username: Sequelize.STRING,
  mail: Sequelize.STRING,
  password: Sequelize.STRING
};

module.exports.model = model;